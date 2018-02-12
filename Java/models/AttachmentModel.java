/**
 * Code generated by Microsoft (R) AutoRest Code Generator.
 * Changes may cause incorrect behavior and will be lost if the code is
 * regenerated.
 */

package softheon.enterprise.api.client.models;

import org.joda.time.DateTime;
import com.fasterxml.jackson.annotation.JsonProperty;

/**
 * The model that is sent in response to a GET request for Attachment.
 */
public class AttachmentModel {
    /**
     * Gets or sets the type. Possible values include: 'Standard',
     * 'EntityLink', 'WebLink'.
     */
    @JsonProperty(value = "Type")
    private String type;

    /**
     * Gets or sets the size.
     */
    @JsonProperty(value = "Size")
    private Long size;

    /**
     * Gets or sets the extension.
     */
    @JsonProperty(value = "Extension")
    private String extension;

    /**
     * Gets or sets the filename.
     */
    @JsonProperty(value = "FileName")
    private String fileName;

    /**
     * Gets or sets the version.
     */
    @JsonProperty(value = "Version")
    private Integer version;

    /**
     * Gets or sets the release.
     */
    @JsonProperty(value = "Release")
    private Integer release;

    /**
     * Gets or sets the category.
     */
    @JsonProperty(value = "Category")
    private Integer category;

    /**
     * Gets or sets the identifier.
     */
    @JsonProperty(value = "ID")
    private Integer id;

    /**
     * Gets or sets the drawer identifier.
     */
    @JsonProperty(value = "DrawerID")
    private Integer drawerID;

    /**
     * Gets or sets the entity identifier.
     */
    @JsonProperty(value = "EntityID")
    private Integer entityID;

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
     * Gets or sets the includer user identifier.
     */
    @JsonProperty(value = "IncluderUserID")
    private Integer includerUserID;

    /**
     * Gets or sets the full name of the includer user.
     */
    @JsonProperty(value = "IncluderUserFullName")
    private String includerUserFullName;

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
     * Gets or sets the insertion time.
     */
    @JsonProperty(value = "InsertionTime")
    private DateTime insertionTime;

    /**
     * Gets or sets the modification time.
     */
    @JsonProperty(value = "ModificationTime")
    private DateTime modificationTime;

    /**
     * Gets or sets the class.
     */
    @JsonProperty(value = "Class")
    private Integer classProperty;

    /**
     * Gets or sets the name.
     */
    @JsonProperty(value = "Name")
    private String name;

    /**
     * Gets or sets the acl.
     */
    @JsonProperty(value = "Acl")
    private Integer acl;

    /**
     * Gets or sets the page number.
     */
    @JsonProperty(value = "PageNumber")
    private Integer pageNumber;

    /**
     * Gets or sets the state. Possible values include: 'Undefined',
     * 'MaxStates', 'Reserved', 'UserDefined', 'Dynamic', 'Static', 'New',
     * 'CheckedOut', 'Internal', 'Statres5', 'Linked', 'Statres4', 'Statres3',
     * 'Statres2', 'Statres1', 'Locked', 'OnServerCache', 'OnClientCache',
     * 'Fetching', 'Dynres4', 'Dynres3', 'Dynres2', 'Dynres1', 'User1',
     * 'User2', 'User3', 'User4', 'User5', 'User6', 'User7', 'User8', 'User9',
     * 'User10', 'User11', 'User12', 'User13', 'User14', 'User15', 'User16'.
     */
    @JsonProperty(value = "State")
    private String state;

    /**
     * Gets or sets the note.
     */
    @JsonProperty(value = "Note")
    private String note;

    /**
     * Get the type value.
     *
     * @return the type value
     */
    public String type() {
        return this.type;
    }

    /**
     * Set the type value.
     *
     * @param type the type value to set
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withType(String type) {
        this.type = type;
        return this;
    }

    /**
     * Get the size value.
     *
     * @return the size value
     */
    public Long size() {
        return this.size;
    }

    /**
     * Set the size value.
     *
     * @param size the size value to set
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withSize(Long size) {
        this.size = size;
        return this;
    }

    /**
     * Get the extension value.
     *
     * @return the extension value
     */
    public String extension() {
        return this.extension;
    }

    /**
     * Set the extension value.
     *
     * @param extension the extension value to set
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withExtension(String extension) {
        this.extension = extension;
        return this;
    }

    /**
     * Get the fileName value.
     *
     * @return the fileName value
     */
    public String fileName() {
        return this.fileName;
    }

    /**
     * Set the fileName value.
     *
     * @param fileName the fileName value to set
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withFileName(String fileName) {
        this.fileName = fileName;
        return this;
    }

    /**
     * Get the version value.
     *
     * @return the version value
     */
    public Integer version() {
        return this.version;
    }

    /**
     * Set the version value.
     *
     * @param version the version value to set
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withVersion(Integer version) {
        this.version = version;
        return this;
    }

    /**
     * Get the release value.
     *
     * @return the release value
     */
    public Integer release() {
        return this.release;
    }

    /**
     * Set the release value.
     *
     * @param release the release value to set
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withRelease(Integer release) {
        this.release = release;
        return this;
    }

    /**
     * Get the category value.
     *
     * @return the category value
     */
    public Integer category() {
        return this.category;
    }

    /**
     * Set the category value.
     *
     * @param category the category value to set
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withCategory(Integer category) {
        this.category = category;
        return this;
    }

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
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withId(Integer id) {
        this.id = id;
        return this;
    }

    /**
     * Get the drawerID value.
     *
     * @return the drawerID value
     */
    public Integer drawerID() {
        return this.drawerID;
    }

    /**
     * Set the drawerID value.
     *
     * @param drawerID the drawerID value to set
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withDrawerID(Integer drawerID) {
        this.drawerID = drawerID;
        return this;
    }

    /**
     * Get the entityID value.
     *
     * @return the entityID value
     */
    public Integer entityID() {
        return this.entityID;
    }

    /**
     * Set the entityID value.
     *
     * @param entityID the entityID value to set
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withEntityID(Integer entityID) {
        this.entityID = entityID;
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
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withOwnerUserID(Integer ownerUserID) {
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
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withOwnerUserFullName(String ownerUserFullName) {
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
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withOwnerGroupID(Integer ownerGroupID) {
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
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withOwnerGroupName(String ownerGroupName) {
        this.ownerGroupName = ownerGroupName;
        return this;
    }

    /**
     * Get the includerUserID value.
     *
     * @return the includerUserID value
     */
    public Integer includerUserID() {
        return this.includerUserID;
    }

    /**
     * Set the includerUserID value.
     *
     * @param includerUserID the includerUserID value to set
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withIncluderUserID(Integer includerUserID) {
        this.includerUserID = includerUserID;
        return this;
    }

    /**
     * Get the includerUserFullName value.
     *
     * @return the includerUserFullName value
     */
    public String includerUserFullName() {
        return this.includerUserFullName;
    }

    /**
     * Set the includerUserFullName value.
     *
     * @param includerUserFullName the includerUserFullName value to set
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withIncluderUserFullName(String includerUserFullName) {
        this.includerUserFullName = includerUserFullName;
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
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withModifierUserID(Integer modifierUserID) {
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
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withModifierUserFullName(String modifierUserFullName) {
        this.modifierUserFullName = modifierUserFullName;
        return this;
    }

    /**
     * Get the insertionTime value.
     *
     * @return the insertionTime value
     */
    public DateTime insertionTime() {
        return this.insertionTime;
    }

    /**
     * Set the insertionTime value.
     *
     * @param insertionTime the insertionTime value to set
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withInsertionTime(DateTime insertionTime) {
        this.insertionTime = insertionTime;
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
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withModificationTime(DateTime modificationTime) {
        this.modificationTime = modificationTime;
        return this;
    }

    /**
     * Get the classProperty value.
     *
     * @return the classProperty value
     */
    public Integer classProperty() {
        return this.classProperty;
    }

    /**
     * Set the classProperty value.
     *
     * @param classProperty the classProperty value to set
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withClassProperty(Integer classProperty) {
        this.classProperty = classProperty;
        return this;
    }

    /**
     * Get the name value.
     *
     * @return the name value
     */
    public String name() {
        return this.name;
    }

    /**
     * Set the name value.
     *
     * @param name the name value to set
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withName(String name) {
        this.name = name;
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
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withAcl(Integer acl) {
        this.acl = acl;
        return this;
    }

    /**
     * Get the pageNumber value.
     *
     * @return the pageNumber value
     */
    public Integer pageNumber() {
        return this.pageNumber;
    }

    /**
     * Set the pageNumber value.
     *
     * @param pageNumber the pageNumber value to set
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withPageNumber(Integer pageNumber) {
        this.pageNumber = pageNumber;
        return this;
    }

    /**
     * Get the state value.
     *
     * @return the state value
     */
    public String state() {
        return this.state;
    }

    /**
     * Set the state value.
     *
     * @param state the state value to set
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withState(String state) {
        this.state = state;
        return this;
    }

    /**
     * Get the note value.
     *
     * @return the note value
     */
    public String note() {
        return this.note;
    }

    /**
     * Set the note value.
     *
     * @param note the note value to set
     * @return the AttachmentModel object itself.
     */
    public AttachmentModel withNote(String note) {
        this.note = note;
        return this;
    }

}