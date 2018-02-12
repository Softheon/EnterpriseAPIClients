// <auto-generated>
// Code generated by Microsoft (R) AutoRest Code Generator.
// Changes may cause incorrect behavior and will be lost if the code is
// regenerated.
// </auto-generated>

namespace Softheon.Enterprise.Api.Client.Models
{
    using Microsoft.Rest;
    using Newtonsoft.Json;
    using System.Linq;

    /// <summary>
    /// The model that is sent in response to a GET request for Attachment
    /// </summary>
    public partial class AttachmentModel
    {
        /// <summary>
        /// Initializes a new instance of the AttachmentModel class.
        /// </summary>
        public AttachmentModel()
        {
            CustomInit();
        }

        /// <summary>
        /// Initializes a new instance of the AttachmentModel class.
        /// </summary>
        /// <param name="type">Gets or sets the type. Possible values include:
        /// 'Standard', 'EntityLink', 'WebLink'</param>
        /// <param name="size">Gets or sets the size.</param>
        /// <param name="extension">Gets or sets the extension.</param>
        /// <param name="fileName">Gets or sets the filename.</param>
        /// <param name="version">Gets or sets the version.</param>
        /// <param name="release">Gets or sets the release.</param>
        /// <param name="category">Gets or sets the category.</param>
        /// <param name="id">Gets or sets the identifier.</param>
        /// <param name="drawerID">Gets or sets the drawer identifier.</param>
        /// <param name="entityID">Gets or sets the entity identifier.</param>
        /// <param name="ownerUserID">Gets or sets the owner user
        /// identifier.</param>
        /// <param name="ownerUserFullName">Gets or sets the full name of the
        /// owner user.</param>
        /// <param name="ownerGroupID">Gets or sets the owner group
        /// identifier.</param>
        /// <param name="ownerGroupName">Gets or sets the name of the owner
        /// group.</param>
        /// <param name="includerUserID">Gets or sets the includer user
        /// identifier.</param>
        /// <param name="includerUserFullName">Gets or sets the full name of
        /// the includer user.</param>
        /// <param name="modifierUserID">Gets or sets the modifier user
        /// identifier.</param>
        /// <param name="modifierUserFullName">Gets or sets the full name of
        /// the modifier user.</param>
        /// <param name="insertionTime">Gets or sets the insertion
        /// time.</param>
        /// <param name="modificationTime">Gets or sets the modification
        /// time.</param>
        /// <param name="classProperty">Gets or sets the class.</param>
        /// <param name="name">Gets or sets the name.</param>
        /// <param name="acl">Gets or sets the acl.</param>
        /// <param name="pageNumber">Gets or sets the page number.</param>
        /// <param name="state">Gets or sets the state. Possible values
        /// include: 'Undefined', 'MaxStates', 'Reserved', 'UserDefined',
        /// 'Dynamic', 'Static', 'New', 'CheckedOut', 'Internal', 'Statres5',
        /// 'Linked', 'Statres4', 'Statres3', 'Statres2', 'Statres1', 'Locked',
        /// 'OnServerCache', 'OnClientCache', 'Fetching', 'Dynres4', 'Dynres3',
        /// 'Dynres2', 'Dynres1', 'User1', 'User2', 'User3', 'User4', 'User5',
        /// 'User6', 'User7', 'User8', 'User9', 'User10', 'User11', 'User12',
        /// 'User13', 'User14', 'User15', 'User16'</param>
        /// <param name="note">Gets or sets the note.</param>
        public AttachmentModel(string type = default(string), long? size = default(long?), string extension = default(string), string fileName = default(string), int? version = default(int?), int? release = default(int?), int? category = default(int?), int? id = default(int?), int? drawerID = default(int?), int? entityID = default(int?), int? ownerUserID = default(int?), string ownerUserFullName = default(string), int? ownerGroupID = default(int?), string ownerGroupName = default(string), int? includerUserID = default(int?), string includerUserFullName = default(string), int? modifierUserID = default(int?), string modifierUserFullName = default(string), System.DateTime? insertionTime = default(System.DateTime?), System.DateTime? modificationTime = default(System.DateTime?), int? classProperty = default(int?), string name = default(string), int? acl = default(int?), int? pageNumber = default(int?), string state = default(string), string note = default(string))
        {
            Type = type;
            Size = size;
            Extension = extension;
            FileName = fileName;
            Version = version;
            Release = release;
            Category = category;
            ID = id;
            DrawerID = drawerID;
            EntityID = entityID;
            OwnerUserID = ownerUserID;
            OwnerUserFullName = ownerUserFullName;
            OwnerGroupID = ownerGroupID;
            OwnerGroupName = ownerGroupName;
            IncluderUserID = includerUserID;
            IncluderUserFullName = includerUserFullName;
            ModifierUserID = modifierUserID;
            ModifierUserFullName = modifierUserFullName;
            InsertionTime = insertionTime;
            ModificationTime = modificationTime;
            ClassProperty = classProperty;
            Name = name;
            Acl = acl;
            PageNumber = pageNumber;
            State = state;
            Note = note;
            CustomInit();
        }

        /// <summary>
        /// An initialization method that performs custom operations like setting defaults
        /// </summary>
        partial void CustomInit();

        /// <summary>
        /// Gets or sets the type. Possible values include: 'Standard',
        /// 'EntityLink', 'WebLink'
        /// </summary>
        [JsonProperty(PropertyName = "Type")]
        public string Type { get; set; }

        /// <summary>
        /// Gets or sets the size.
        /// </summary>
        [JsonProperty(PropertyName = "Size")]
        public long? Size { get; set; }

        /// <summary>
        /// Gets or sets the extension.
        /// </summary>
        [JsonProperty(PropertyName = "Extension")]
        public string Extension { get; set; }

        /// <summary>
        /// Gets or sets the filename.
        /// </summary>
        [JsonProperty(PropertyName = "FileName")]
        public string FileName { get; set; }

        /// <summary>
        /// Gets or sets the version.
        /// </summary>
        [JsonProperty(PropertyName = "Version")]
        public int? Version { get; set; }

        /// <summary>
        /// Gets or sets the release.
        /// </summary>
        [JsonProperty(PropertyName = "Release")]
        public int? Release { get; set; }

        /// <summary>
        /// Gets or sets the category.
        /// </summary>
        [JsonProperty(PropertyName = "Category")]
        public int? Category { get; set; }

        /// <summary>
        /// Gets or sets the identifier.
        /// </summary>
        [JsonProperty(PropertyName = "ID")]
        public int? ID { get; set; }

        /// <summary>
        /// Gets or sets the drawer identifier.
        /// </summary>
        [JsonProperty(PropertyName = "DrawerID")]
        public int? DrawerID { get; set; }

        /// <summary>
        /// Gets or sets the entity identifier.
        /// </summary>
        [JsonProperty(PropertyName = "EntityID")]
        public int? EntityID { get; set; }

        /// <summary>
        /// Gets or sets the owner user identifier.
        /// </summary>
        [JsonProperty(PropertyName = "OwnerUserID")]
        public int? OwnerUserID { get; set; }

        /// <summary>
        /// Gets or sets the full name of the owner user.
        /// </summary>
        [JsonProperty(PropertyName = "OwnerUserFullName")]
        public string OwnerUserFullName { get; set; }

        /// <summary>
        /// Gets or sets the owner group identifier.
        /// </summary>
        [JsonProperty(PropertyName = "OwnerGroupID")]
        public int? OwnerGroupID { get; set; }

        /// <summary>
        /// Gets or sets the name of the owner group.
        /// </summary>
        [JsonProperty(PropertyName = "OwnerGroupName")]
        public string OwnerGroupName { get; set; }

        /// <summary>
        /// Gets or sets the includer user identifier.
        /// </summary>
        [JsonProperty(PropertyName = "IncluderUserID")]
        public int? IncluderUserID { get; set; }

        /// <summary>
        /// Gets or sets the full name of the includer user.
        /// </summary>
        [JsonProperty(PropertyName = "IncluderUserFullName")]
        public string IncluderUserFullName { get; set; }

        /// <summary>
        /// Gets or sets the modifier user identifier.
        /// </summary>
        [JsonProperty(PropertyName = "ModifierUserID")]
        public int? ModifierUserID { get; set; }

        /// <summary>
        /// Gets or sets the full name of the modifier user.
        /// </summary>
        [JsonProperty(PropertyName = "ModifierUserFullName")]
        public string ModifierUserFullName { get; set; }

        /// <summary>
        /// Gets or sets the insertion time.
        /// </summary>
        [JsonProperty(PropertyName = "InsertionTime")]
        public System.DateTime? InsertionTime { get; set; }

        /// <summary>
        /// Gets or sets the modification time.
        /// </summary>
        [JsonProperty(PropertyName = "ModificationTime")]
        public System.DateTime? ModificationTime { get; set; }

        /// <summary>
        /// Gets or sets the class.
        /// </summary>
        [JsonProperty(PropertyName = "Class")]
        public int? ClassProperty { get; set; }

        /// <summary>
        /// Gets or sets the name.
        /// </summary>
        [JsonProperty(PropertyName = "Name")]
        public string Name { get; set; }

        /// <summary>
        /// Gets or sets the acl.
        /// </summary>
        [JsonProperty(PropertyName = "Acl")]
        public int? Acl { get; set; }

        /// <summary>
        /// Gets or sets the page number.
        /// </summary>
        [JsonProperty(PropertyName = "PageNumber")]
        public int? PageNumber { get; set; }

        /// <summary>
        /// Gets or sets the state. Possible values include: 'Undefined',
        /// 'MaxStates', 'Reserved', 'UserDefined', 'Dynamic', 'Static', 'New',
        /// 'CheckedOut', 'Internal', 'Statres5', 'Linked', 'Statres4',
        /// 'Statres3', 'Statres2', 'Statres1', 'Locked', 'OnServerCache',
        /// 'OnClientCache', 'Fetching', 'Dynres4', 'Dynres3', 'Dynres2',
        /// 'Dynres1', 'User1', 'User2', 'User3', 'User4', 'User5', 'User6',
        /// 'User7', 'User8', 'User9', 'User10', 'User11', 'User12', 'User13',
        /// 'User14', 'User15', 'User16'
        /// </summary>
        [JsonProperty(PropertyName = "State")]
        public string State { get; set; }

        /// <summary>
        /// Gets or sets the note.
        /// </summary>
        [JsonProperty(PropertyName = "Note")]
        public string Note { get; set; }

        /// <summary>
        /// Validate the object.
        /// </summary>
        /// <exception cref="ValidationException">
        /// Thrown if validation fails
        /// </exception>
        public virtual void Validate()
        {
            if (Name != null)
            {
                if (Name.Length > 255)
                {
                    throw new ValidationException(ValidationRules.MaxLength, "Name", 255);
                }
                if (Name.Length < 0)
                {
                    throw new ValidationException(ValidationRules.MinLength, "Name", 0);
                }
            }
            if (PageNumber > 2147483647)
            {
                throw new ValidationException(ValidationRules.InclusiveMaximum, "PageNumber", 2147483647);
            }
            if (PageNumber < 0)
            {
                throw new ValidationException(ValidationRules.InclusiveMinimum, "PageNumber", 0);
            }
            if (Note != null)
            {
                if (Note.Length > 255)
                {
                    throw new ValidationException(ValidationRules.MaxLength, "Note", 255);
                }
                if (Note.Length < 0)
                {
                    throw new ValidationException(ValidationRules.MinLength, "Note", 0);
                }
            }
        }
    }
}
