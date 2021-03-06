/**
 * Code generated by Microsoft (R) AutoRest Code Generator.
 * Changes may cause incorrect behavior and will be lost if the code is
 * regenerated.
 */

package softheon.enterprise.api.client.models;

import org.joda.time.DateTime;
import java.util.List;
import com.fasterxml.jackson.annotation.JsonProperty;

/**
 * The model that is sent in response to a GET request for Entity.
 */
public class ProfileModel {
    /**
     * Gets or sets the profile identifier.
     */
    @JsonProperty(value = "ID")
    private Integer id;

    /**
     * Gets or sets the access control list.
     */
    @JsonProperty(value = "Acl")
    private Integer acl;

    /**
     * Gets or sets the type.
     */
    @JsonProperty(value = "Type")
    private Integer type;

    /**
     * Gets or sets the extension count.
     */
    @JsonProperty(value = "ExtensionCount")
    private Integer extensionCount;

    /**
     * Gets or sets the owner user identifier.
     */
    @JsonProperty(value = "OwnerUserID")
    private Integer ownerUserID;

    /**
     * Gets or sets the full name of the owner user.
     */
    @JsonProperty(value = "OwnerUserFullName")
    private String ownerUserFullName;

    /**
     * Gets or sets the owner group identifier.
     */
    @JsonProperty(value = "OwnerGroupID")
    private Integer ownerGroupID;

    /**
     * Gets or sets the name of the owner group.
     */
    @JsonProperty(value = "OwnerGroupName")
    private String ownerGroupName;

    /**
     * Gets or sets the modifier user identifier.
     */
    @JsonProperty(value = "ModifierUserID")
    private Integer modifierUserID;

    /**
     * Gets or sets the full name of the modifier user.
     */
    @JsonProperty(value = "ModifierUserFullName")
    private String modifierUserFullName;

    /**
     * Gets or sets the modification time.
     */
    @JsonProperty(value = "ModificationTime")
    private DateTime modificationTime;

    /**
     * Gets or sets the strings.
     */
    @JsonProperty(value = "Strings")
    private List<String> strings;

    /**
     * Gets or sets the integers.
     */
    @JsonProperty(value = "Integers")
    private List<Integer> integers;

    /**
     * Gets or sets the doubles.
     */
    @JsonProperty(value = "Doubles")
    private List<Double> doubles;

    /**
     * Gets or sets the dates.
     */
    @JsonProperty(value = "Dates")
    private List<DateTime> dates;

    /**
     * Gets or sets the extensions.
     */
    @JsonProperty(value = "Extensions")
    private List<ExtensionModel> extensions;

    /**
     * Get the id value.
     *
     * @return the id value
     */
    public Integer id() {
        return this.id;
    }

    /**
     * Set the id value.
     *
     * @param id the id value to set
     * @return the ProfileModel object itself.
     */
    public ProfileModel withId(Integer id) {
        this.id = id;
        return this;
    }

    /**
     * Get the acl value.
     *
     * @return the acl value
     */
    public Integer acl() {
        return this.acl;
    }

    /**
     * Set the acl value.
     *
     * @param acl the acl value to set
     * @return the ProfileModel object itself.
     */
    public ProfileModel withAcl(Integer acl) {
        this.acl = acl;
        return this;
    }

    /**
     * Get the type value.
     *
     * @return the type value
     */
    public Integer type() {
        return this.type;
    }

    /**
     * Set the type value.
     *
     * @param type the type value to set
     * @return the ProfileModel object itself.
     */
    public ProfileModel withType(Integer type) {
        this.type = type;
        return this;
    }

    /**
     * Get the extensionCount value.
     *
     * @return the extensionCount value
     */
    public Integer extensionCount() {
        return this.extensionCount;
    }

    /**
     * Set the extensionCount value.
     *
     * @param extensionCount the extensionCount value to set
     * @return the ProfileModel object itself.
     */
    public ProfileModel withExtensionCount(Integer extensionCount) {
        this.extensionCount = extensionCount;
        return this;
    }

    /**
     * Get the ownerUserID value.
     *
     * @return the ownerUserID value
     */
    public Integer ownerUserID() {
        return this.ownerUserID;
    }

    /**
     * Set the ownerUserID value.
     *
     * @param ownerUserID the ownerUserID value to set
     * @return the ProfileModel object itself.
     */
    public ProfileModel withOwnerUserID(Integer ownerUserID) {
        this.ownerUserID = ownerUserID;
        return this;
    }

    /**
     * Get the ownerUserFullName value.
     *
     * @return the ownerUserFullName value
     */
    public String ownerUserFullName() {
        return this.ownerUserFullName;
    }

    /**
     * Set the ownerUserFullName value.
     *
     * @param ownerUserFullName the ownerUserFullName value to set
     * @return the ProfileModel object itself.
     */
    public ProfileModel withOwnerUserFullName(String ownerUserFullName) {
        this.ownerUserFullName = ownerUserFullName;
        return this;
    }

    /**
     * Get the ownerGroupID value.
     *
     * @return the ownerGroupID value
     */
    public Integer ownerGroupID() {
        return this.ownerGroupID;
    }

    /**
     * Set the ownerGroupID value.
     *
     * @param ownerGroupID the ownerGroupID value to set
     * @return the ProfileModel object itself.
     */
    public ProfileModel withOwnerGroupID(Integer ownerGroupID) {
        this.ownerGroupID = ownerGroupID;
        return this;
    }

    /**
     * Get the ownerGroupName value.
     *
     * @return the ownerGroupName value
     */
    public String ownerGroupName() {
        return this.ownerGroupName;
    }

    /**
     * Set the ownerGroupName value.
     *
     * @param ownerGroupName the ownerGroupName value to set
     * @return the ProfileModel object itself.
     */
    public ProfileModel withOwnerGroupName(String ownerGroupName) {
        this.ownerGroupName = ownerGroupName;
        return this;
    }

    /**
     * Get the modifierUserID value.
     *
     * @return the modifierUserID value
     */
    public Integer modifierUserID() {
        return this.modifierUserID;
    }

    /**
     * Set the modifierUserID value.
     *
     * @param modifierUserID the modifierUserID value to set
     * @return the ProfileModel object itself.
     */
    public ProfileModel withModifierUserID(Integer modifierUserID) {
        this.modifierUserID = modifierUserID;
        return this;
    }

    /**
     * Get the modifierUserFullName value.
     *
     * @return the modifierUserFullName value
     */
    public String modifierUserFullName() {
        return this.modifierUserFullName;
    }

    /**
     * Set the modifierUserFullName value.
     *
     * @param modifierUserFullName the modifierUserFullName value to set
     * @return the ProfileModel object itself.
     */
    public ProfileModel withModifierUserFullName(String modifierUserFullName) {
        this.modifierUserFullName = modifierUserFullName;
        return this;
    }

    /**
     * Get the modificationTime value.
     *
     * @return the modificationTime value
     */
    public DateTime modificationTime() {
        return this.modificationTime;
    }

    /**
     * Set the modificationTime value.
     *
     * @param modificationTime the modificationTime value to set
     * @return the ProfileModel object itself.
     */
    public ProfileModel withModificationTime(DateTime modificationTime) {
        this.modificationTime = modificationTime;
        return this;
    }

    /**
     * Get the strings value.
     *
     * @return the strings value
     */
    public List<String> strings() {
        return this.strings;
    }

    /**
     * Set the strings value.
     *
     * @param strings the strings value to set
     * @return the ProfileModel object itself.
     */
    public ProfileModel withStrings(List<String> strings) {
        this.strings = strings;
        return this;
    }

    /**
     * Get the integers value.
     *
     * @return the integers value
     */
    public List<Integer> integers() {
        return this.integers;
    }

    /**
     * Set the integers value.
     *
     * @param integers the integers value to set
     * @return the ProfileModel object itself.
     */
    public ProfileModel withIntegers(List<Integer> integers) {
        this.integers = integers;
        return this;
    }

    /**
     * Get the doubles value.
     *
     * @return the doubles value
     */
    public List<Double> doubles() {
        return this.doubles;
    }

    /**
     * Set the doubles value.
     *
     * @param doubles the doubles value to set
     * @return the ProfileModel object itself.
     */
    public ProfileModel withDoubles(List<Double> doubles) {
        this.doubles = doubles;
        return this;
    }

    /**
     * Get the dates value.
     *
     * @return the dates value
     */
    public List<DateTime> dates() {
        return this.dates;
    }

    /**
     * Set the dates value.
     *
     * @param dates the dates value to set
     * @return the ProfileModel object itself.
     */
    public ProfileModel withDates(List<DateTime> dates) {
        this.dates = dates;
        return this;
    }

    /**
     * Get the extensions value.
     *
     * @return the extensions value
     */
    public List<ExtensionModel> extensions() {
        return this.extensions;
    }

    /**
     * Set the extensions value.
     *
     * @param extensions the extensions value to set
     * @return the ProfileModel object itself.
     */
    public ProfileModel withExtensions(List<ExtensionModel> extensions) {
        this.extensions = extensions;
        return this;
    }

}
